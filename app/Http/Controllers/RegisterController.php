<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Exception;
use Illuminate\Http\Request;
use SendGrid;
use SendGrid\Mail\Mail;

class RegisterController extends Controller
{

    function submit(Request $request) {
        $validation = $request->validate([
            'team_name'         =>  'required|unique:App\Models\Team,name',
            'player'            =>  'required|array|min:5|max:5',
            'player.*.name'     =>  'required|string',
            'player.*.surname'  =>  'required|string',
            'player.*.username' =>  'required|distinct',
            'player.*.email'    =>  'required|distinct|email:rfc,dns|unique:App\Models\Player,email',
            'rules'             =>  'required|accepted'
        ]);

        $team = new Team;
        $team->name = $validation['team_name'];
        $team->save();

        $sendgrid = new SendGrid('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');

        foreach ($validation['player'] as $player) {
            /*
            Add user in database
            */
            $user = new Player;
            $user->name = $player['name'];
            $user->surname = $player['surname'];
            $user->username = $player['username'];
            $user->email = $player['email'];
            $user->team_name = $validation['team_name'];
            $user->save();

            $email = new Mail();
            $email->setFrom('interlan.lannion@gmail.com');
            $email->setSubject('Préinscription InterLan - 2022');
            $email->addTo($player['email']);
            $email->addDynamicTemplateDatas([
                "username"  =>  $player['username'],
                "email"     =>  $player['email'],
                "team_name" =>  $validation['team_name']
            ]);
            $email->setTemplateId("d-b3ae944a9d8a4e4f8af52b9124878872");
            try {
                $sendgrid->send($email);
            } catch (Exception $e) {
                die("Une erreur est survenu lors de l'envoi du mail\n Merci d'envoyer un mail à interasso.lannion@gmail.com afin de résoudre ce soucis");
            }
        }

        return view('validate');
    }
}
