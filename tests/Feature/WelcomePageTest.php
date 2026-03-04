<?php

it('displays the welcome page with polyscope paragraph', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Hello from Polyscope');
    $response->assertSee('Polyscope is great');
});
