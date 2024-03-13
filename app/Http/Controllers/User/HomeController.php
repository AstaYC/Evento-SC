<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $events = DB::select("SELECT events.* , users.nom AS username , categories.id AS id_categorie , categories.nom FROM events INNER JOIN categories ON events.categorie_id = categories.id INNER JOIN users on events.user_id = users.id where status = 'accepted';");
        $categories = Categorie::all();
        return view('User.Home' , compact('categories'));
    }

    public function search($keyword=''){
            $keyWords = $keyword;

            $events = DB::select("SELECT events.* , users.nom AS username , categories.id AS id_categorie , categories.nom FROM events INNER JOIN categories ON events.categorie_id = categories.id INNER JOIN users on events.user_id = users.id where status = 'accepted' AND (events.titre LIKE '%$keyWords%' OR categories.nom LIKE '%$keyWords%');");
            foreach($events as $event){?>
            <div class="col-lg-6 col-md-6">
                <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div data-tilt class="thumb">
                    <a href="<?php echo url('/home/eventDetail/' . $event->id); ?>"><img src="<?php echo isset($event->images) ? asset('img/' . $event->images) : 'placeholder_image_url'; ?>"></a></div>
                    <div class="performer_heading">
                        <h4><?=$event->titre?></h4>
                        <span><b>Organizated By : </b><?= $event->organization ?></span>
                        <br>
                        <span><b>Categorie : </b><?= $event->nom ?></span>
                    </div>
                </div>
            </div>
        <?php }
    }

    public function filtre($filtre=''){
        $filtres = $filtre;

        $events = DB::select("SELECT events.* , users.nom AS username , categories.id AS id_categorie , categories.nom FROM events INNER JOIN categories ON events.categorie_id = categories.id INNER JOIN users on events.user_id = users.id where status = 'accepted' AND (categories.nom LIKE '%$filtres%');");
        foreach($events as $event){?>
        <div class="col-lg-6 col-md-6">
            <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div data-tilt class="thumb">
                <a href="<?php echo url('/home/eventDetail/' . $event->id); ?>"><img src="<?php echo isset($event->images) ? asset('img/' . $event->images) : 'placeholder_image_url'; ?>"></a></div>
                <div class="performer_heading">
                    <h4><?=$event->titre?></h4>
                    <span><b>Organizated By : </b><?= $event->organization ?></span>
                    <br>
                    <span><b>Categorie : </b><?= $event->nom ?></span>
                </div>
            </div>
        </div>
    <?php }
 }
}
