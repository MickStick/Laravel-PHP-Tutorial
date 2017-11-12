<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Send 'Contact Us' info.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function send(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'info' => 'required'
        ]);

        return redirect('/')->with('success','We\'ll get in touch with you ASAP');
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'name.required' => 'Your Name is needed',
        'email.required' => 'We need your Email Address',
        'email.E-mail' => 'Invalid Email Address',
        'info.required'  => 'We don\'t know what you want.',
    ];
}
}
