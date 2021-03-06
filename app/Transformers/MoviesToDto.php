<?php namespace App\Transformers;
use App\Models\Movies;
class MoviesToDto{
  public static function provideTransformer(Movies $movie){
    switch($movie->type){
      case'Comedy':return['id'=>$movie->id,'title'=>$movie->name,'category'=>'Comedy / Drama',];
      case'Mystery/Crime':return['id'=>$movie->id,'title'=>$movie->name,'category'=>'Mystery / Crime',];
      default:return['id'=>$movie->id,'title'=>$movie->name,'category'=>$movie->type,];}}}