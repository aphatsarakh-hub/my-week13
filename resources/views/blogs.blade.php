@extends('layout')

@section('title','บทความทั้งหมด')
    
@section('content')
@if (count($blogs) > 0)
<h2 class="text-center py-2" >บทความ</h2>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">title</th>
      {{-- <th scope="col">Content</th> --}}
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">controll</th>
    </tr>
  </thead>
  <tbody>
     @foreach($blogs as $item)
    <tr>
      <td>{{$item ->title}}</td>
      {{-- <td>{{ Str::limit ($item ->content , 20)}}</td> --}}
      <td>
         @if ($item->status)
          <a href=" {{route('change', $item->id)}}" class="btn btn-success">เผยแพร่</a>
          @else
          <a href=" {{route('change', $item->id)}}" class="btn btn-danger">ไม่เผยแพร่</a>
          @endif  
      </td>
     <td>
        <a href=" {{route('edit', $item->id)}}" class="btn btn-warning">แก้ไข</a>
     </td>
      <td>
        <a href=" {{route('delete', $item->id)}}" class="btn btn-danger"
           onclick="return confirm('คุณต้องการลบบทความนี้ {{ $item->title }} จริงหรือไม่?')">ลบ</a></td>
    </tr> 
    @endforeach
    </tbody>
</table>
{{$blogs->links()}} 
@else
<h2 class="text-center py-2" >ไม่พบข้อมูล</h2>
@endif
@endsection
