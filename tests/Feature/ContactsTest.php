<?php

namespace Tests\Feature;

use App\Contact;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_contact_can_be_added()
    {
        //예외처리 핸들링
        $this->withoutExceptionHandling();

        //이름을 전달하는 테스트 코드
        $this->post('/api/contacts', $this->data());

            //데이터베이스의 첫번째 것 가져오기
            $contact = Contact::first();

        $this->assertEquals('Test Name', $contact->name);
        $this->assertEquals('test@email.com', $contact->email);
        $this->assertEquals('05/14/1988', $contact->birthday->format('m/d/Y'));
        $this->assertEquals('ABC String', $contact->company);
    }

    /** @test */
    public function fields_are_required()
    {
        collect(['name', 'email', 'birthday', 'company'])
            ->each(function($field){

       //이름을 전달하는 테스트 코드
       $response = $this->post('/api/contacts',
       array_merge($this->data(),[$field => '']));

        $response->assertSessionHasErrors($field);
        $this->assertCount(0, Contact::all());

            });
    }

    /** @test */
    public function email_must_be_a_valid_email()
    {
       //이름을 전달하는 테스트 코드
       $response = $this->post('/api/contacts',
                            array_merge($this->data(),['email' => 'NOT AN EMAIL']));

        $response->assertSessionHasErrors('email');
        $this->assertCount(0, Contact::all());
    }

    /** @test */
    public function birthdays_are_properly_stored()
    {

        $this->withExceptionHandling();
         //이름을 전달하는 테스트 코드
       $response = $this->post('/api/contacts',
                                 array_merge($this->data()));

        $this->assertCount(1, Contact::all());
        $this->assertInstanceOf(Carbon::class, Contact::first()->birthday);
        $this->assertEquals('05-14-1988',Contact::first()->birthday->format('m-d-Y'));
    }



    private function data()
    {
        return[
            'name' => 'Test Name',
            'email' => 'test@email.com',
            'birthday' => '05/14/1988',
            'company' => 'ABC String',
        ];
    }
}
