@extends('layouts.app')
@section('title','Messages')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6">
  <h1 class="text-3xl font-bold mb-6">Contact Submissions</h1>
  <table class="w-full table-auto border-collapse">
    <thead>
      <tr class="bg-gray-100">
        <th class="border p-2">Name</th>
        <th class="border p-2">Email</th>
        <th class="border p-2">Message</th>
        <th class="border p-2">Received At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($msgs as $msg)
        <tr>
          <td class="border p-2">{{ $msg->name }}</td>
          <td class="border p-2">{{ $msg->email }}</td>
          <td class="border p-2">{{ $msg->message }}</td>
          <td class="border p-2">{{ $msg->created_at->format('Y-m-d H:i') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-4">{{ $msgs->links() }}</div>
</div>
@endsection
