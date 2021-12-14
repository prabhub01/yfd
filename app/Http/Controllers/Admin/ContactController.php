<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Alert;
use App\Models\Blog;
use App\Models\ContactUsDetail;

class ContactController extends Controller
{

    public function update(Request $request, $id)
    {
        $details = ContactUsDetail::findOrFail($id);
        $input = $request->all();
        $details->update($input);

        return redirect()->back()
            ->with('flash_success', 'Conatct updated successfully');
    }
}