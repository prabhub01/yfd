<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Alert;
use App\Models\Blog;
use App\Models\ContactUsDetail;
use App\Models\JoinUs;

class JoinUssController extends Controller
{
    public function update(Request $request, $id)
    {
        $details = JoinUs::findOrFail($id);
        $input = $request->all();

        $details->update($input);

        return redirect()->back()
            ->with('flash_success', 'Join Us Page updated successfully');
    }
}