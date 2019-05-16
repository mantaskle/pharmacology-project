<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_guest_cannot_access_system_pages_without_logging_in()
    {
        //$this->withoutExceptionHandling(); returns unauthenticated once un-commented, test - PASSED

        //Given - I am a guest who is not logged in
        //When - I access the pages of system
        //There - I should be redirected to login page
        $this->get('/approval')->assertRedirect('/login');        
        $this->get('/edit_profile')->assertRedirect('/login');
        $this->get('/profile')->assertRedirect('/login');
        $this->get('/vaistu-dozavimas')->assertRedirect('/login');
        $this->get('/vaistai')->assertRedirect('/login');
        $this->get('/rezultatai')->assertRedirect('/login');
        $this->get('pacients')->assertRedirect('/login');
        $this->get('prescriptions')->assertRedirect('/login');
        $this->get('medication')->assertRedirect('/login');
        $this->get('/vaistas')->assertRedirect('/login');
        $this->get('/wiki')->assertRedirect('/login');
        $this->get('event/add')->assertRedirect('/login');
        $this->get('event')->assertRedirect('/login');
        $this->get('new_ticket')->assertRedirect('/login');
        $this->get('my_tickets')->assertRedirect('/login');
        $this->get('/users')->assertRedirect('/login');
    }

    /** @test */
    public function a_guest_cannot_add_pacient()
    {
        //$this->withoutExceptionHandling(); returns unauthenticated once un-commented, test - PASSED

        //Given - I am a guest who is not logged in
        //When - I try to add the pacient to the database
        //There - I should be redirected to login page

        $data = [
            'name' => "Name",
            'surname' => "Surname",
            'age' => 20,
            'height' => 177,
            'weight' => 58,
            'condition' => 2,            
            'additional_information' => "Random" ];

        $response = $this->json('POST', 'pacients', $data);
        $response->assertStatus(401);
        $response->assertJson(['message' => "Unauthenticated."]);
    }

    /** @test */
    public function a_guest_cannot_add_prescription()
    {
        //$this->withoutExceptionHandling(); returns unauthenticated once un-commented, test - PASSED

        //Given - I am a guest who is not logged in
        //When - I try to add the prescription to the database
        //There - I should be redirected to login page

        $data = [
            'prescription_id' => "P1234",
            'dosage_amount' => 4,
            'dosage_time' => 4,
            'from_date' => '2019-05-01',
            'to_date' => '2019-09-01',
            'pacient_id' => 1,     
            'medication_id' => 1,       
            'additional_information' => "Random" ];

        $response = $this->json('POST', 'prescriptions', $data);
        $response->assertStatus(401);
        $response->assertJson(['message' => "Unauthenticated."]);
    }

    /** @test */
    public function a_guest_cannot_add_ticket()
    {
        //$this->withoutExceptionHandling(); returns unauthenticated once un-commented, test - PASSED

        //Given - I am a guest who is not logged in
        //When - I try to add the ticket to the database
        //There - I should be redirected to login page
        $this->post('new_ticket');

        $data = [
            'user_id' => 1,
            'category_id' => 1,
            'ticket_id' => 3,
            'title' => "Blah",
            'priority' => "Blah",
            'message' => "Blah",            
            'status' => "Random" ];

        $response = $this->json('POST', 'new_ticket', $data);
        $response->assertStatus(401);
        $response->assertJson(['message' => "Unauthenticated."]);
    }

    /** @test */
    public function a_guest_cannot_add_event()
    {
        //$this->withoutExceptionHandling(); returns unauthenticated once un-commented, test - PASSED

        //Given - I am a guest who is not logged in
        //When - I try to add the event to the database
        //There - I should be redirected to login page
        $this->post('event/add');

        $data = [
            'title' => "Blah",
            'start_date' => '2019-05-01',
            'end_date' => '2019-06-01' ];

        $response = $this->json('POST', 'event/add', $data);
        $response->assertStatus(401);
        $response->assertJson(['message' => "Unauthenticated."]);
    }
}
