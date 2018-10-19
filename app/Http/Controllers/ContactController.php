<?php

namespace App\Http\Controllers;

use Dymantic\Secretary\ContactForm;
use Dymantic\Secretary\Secretary;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Secretary $secretary, ContactForm $form)
    {
        $secretary->receive($form->contactMessage(['phone']));
    }
}
