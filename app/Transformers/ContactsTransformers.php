<?php

namespace App\Transformers;

use App\Contacts;
use League\Fractal;

$fractal = new League\Fractal\Manager();
$resource = new League\Fractal\Resource\Collection(App\Contacts::all(), new App\Transformers\ContactsTransformer);
$rootScope = $fractal->createData($resource);
$rootScope->toArray();

class ContacsTransformers extends Fractal\TransformersAbstract
{
	
	public function transform(Contact $contact){
		return [
			'id' 	=> (int) $contact->Contacts_ID,
			'name'	=> $contact->Contacts_Name,
			'email'	=> $contact->Contacs_Email,
		];
	}
}