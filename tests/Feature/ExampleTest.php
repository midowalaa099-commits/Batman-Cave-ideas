<?php

it('the application returns a successful response', function () {
    visit('/register')
    ->fill('name','Mohamed Walaa')
        ->fill('email','mohamed@example.com')
        ->fill('password','password')
        ->fill('password_confirmation','password')
        ->press('@register-button')
        ->assertPathIs('/ideas');

});
