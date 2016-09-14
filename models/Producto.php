<?php
	class Producto extends Eloquent{
		protected $table = "productos";
		protected $fillable = ['nombre','serial'];
	}
?>