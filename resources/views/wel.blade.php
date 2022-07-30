@extends('layouts.master')


@section('style')
<style> body { background:green; color:white; }</style>
<h1><?= isset($greeting) ? "{$greeting}" : 'HELLO' ?><?= $name; ?></h1>

<?= $greeting ?>
{{$greeting}}

{{-- 주석, 7부터 문법이 바뀌어 or 가 아닌 ?? 로 변경됨 --}}
<h2>{{ $greeting or 'Hi'}} {{ $name or '' }}</h2>



{{ isset($name) ? $name : 'Default' }}
{{ $name or 'Default' }} 
{{ $name ?? 'Default' }} 

{{--블레이드 주석안에서 변수 입력 {{$greeting}}을 출력 --}}
<h1>안녕하세요? Foo</h1>

@section('content')
<p>저는 자식뷰의 'content' 입니다.</p>

{{-- 조건문 --}}
@if ($num > 10)
<p>{{$num}} 는 10보다 큰수</p>
@else
<p>{{$num}} 는 10보다 작은 수</p>
@endif

@if ($itemCount = count($items))
 <p>{{$itemCount}}종류 과일</p>
@else
  <p>과일없음</p>
@endif


@section('script')

<script> alert("저는 자식 뷰의 'script' 섹션입니다.");</script>
{{-- 반복문 --}}

<ul>
  @foreach($items as $item)
  <li>{{$item}}</li>
  @endforeach
</ul>

<ul>
  <?php $boxs=[];?>
  @forelse ($boxs as $thing)
  <li>{{$thing}}</li>
  @empty
  <li>아무것도 없음! 확인해보기</li>
  @endforelse
</ul>
  @include('partials.footer')
@endsection