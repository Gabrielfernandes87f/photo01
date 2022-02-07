<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Carousel Template · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

    <style>

        ul{
            display: flex;
            justify-content: space-between;
            width: 820px;
            max-width: 920px;
            min-width: 620px;
            text-align: center;
            margin: 0 auto;
            flex-wrap: wrap;


        }
        li{
            list-style: none;
            padding: 5px;
            font-size: 20px;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;

        }
        a{
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
        nav {

            box-shadow: #ccc 0px 0px 10px;

        }

    </style>

<body>

<header>
<nav>
    <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">quem sou eu</a></li>
        <li><a href="#">contato</a></li>
        <li><a href="#">login</a></li>
        <li><a href="#">eventos</a></li>
    </ul>
</nav>
</header>

<main>

           <!-- START THE FEATURETTES -->
           <hr class="featurette-divider mt-4 mb-5">


             <hr class="featurette-divider">

               <!--EVENTOS-->

       <!--//EVENTOS-->



   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
 <footer id="footer">
     <x-footer />

 </footer><!-- End Footer -->


</main>


</body>

</html>


<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Album
 *
 * @property $id
 * @property $image_capa
 * @property $image_album
 * @property $name
 * @property $category
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Album extends Model

{

    use HasFactory;
    use UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';

    static $rules = [
        'image_capa' => 'required|image|mimes:jpeg,png,jpg,svg|max:8048',
        'image_album' => 'required|image|mimes:jpeg,png,jpg,svg|max:8048',
        'name' => 'required|string|max:20',
        'category' => 'required|string|max:15',
        'description' => 'required|string|max:100',
    ];

    protected $perPage = 20;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_capa','image_album','name','category','description'
    ];



}
