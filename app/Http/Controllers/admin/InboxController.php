<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class InboxController extends Controller
{
    public function index()
    {
        $inboxes = Inbox::getAllInbox();
        return View::make('admin.inbox.index', compact('inboxes'));
    }

    public function ajaxInbox($id)
    {
        $inbox = Inbox::select('id', 'name', 'title', 'message', 'created_at', 'email', 'phone')
            ->where('id', $id)
            ->first();
        return Response::json($inbox);
    }

    public function ajaxDelete(Request $request)
    {
        Inbox::destroy($request->all()['ids']);
        return Response::json(['success' => true]);
    }
}
