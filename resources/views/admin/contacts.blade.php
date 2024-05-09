@extends("admin.master")
@section("content")
    <div class="container">
        <div class="title">
            <h2>التواصل</h2>
        </div>
        <table class="table" style="text-align: right">
            <thead>
              <tr>
                <th scope="col">رقم</th>
                <th scope="col">الاسم</th>
                <th scope="col">البريد</th>
                <th scope="col">الرسالة</th>
              </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
              <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->message}}</td>
              </tr>
             
              @endforeach
            </tbody>
          </table>
    </div>
@endsection