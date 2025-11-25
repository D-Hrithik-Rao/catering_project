<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'full_name' => 'required|string',
            'contact_number' => 'required|string',
            'event_address' => 'required|string',
            'city' => 'required|string',
            'event_name' => 'required|string',
            'delivery_date' => 'required|date',
            'cart_items' => 'required|array',
        ]);

        DB::beginTransaction();

        try {
            // Insert into orders table
            $orderId = DB::table('orders')->insertGetId([
                'user_id' => $validated['user_id'],
                'full_name' => $validated['full_name'],
                'contact_number' => $validated['contact_number'],
                'event_address' => $validated['event_address'],
                'city' => $validated['city'],
                'event_name' => $validated['event_name'],
                'delivery_date' => $validated['delivery_date'],
                'order_status' => 'pending',
                'order_date' => Carbon::now(),
            ]);

            // Insert into order_items
            foreach ($validated['cart_items'] as $itemId => $item) {
                DB::table('order_details')->insert([
                    'order_id' => $orderId,
                    'item_id' => $itemId,
                    'price' => $item['price'],
                    'created_at' => Carbon::now()
                ]);
            }

            DB::commit();

            return response()->json(['message' => 'Order placed successfully.']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
