<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    
    public function getAllNotifications()
    {
        return response()->json(Notification::all());
    }

    public function getNotificationsByCatId($id)
    {
        return response()->json(Notification::where('catId', $id));
    }

    public function getNotificationsByShelterId($id)
    {
        return response()->json(Notification::where('shelterId', $id));
    }

    public function createNotification(Request $request)
    {
        $Notification = Notification::create($request->all());

        return response()->json($Notification, 201);
    }

    public function updateNotification($id, Request $request)
    {
        $Notification = Notification::findOrFail($id);
        $Notification->update($request->all());

        return response()->json($Notification, 200);
    }

    public function deleteNotification($id)
    {
        Notification::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}