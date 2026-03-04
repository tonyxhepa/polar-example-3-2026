<?php

it('displays the welcome page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Hello from Polyscope');
    $response->assertDontSee('Polyscope is great');
});
