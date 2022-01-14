@extends('client.layout.site')
@section('subhead')
    <title>{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->meta_title: $product->language()->meta_title}}</title>
    <meta name="description"
          content="{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->meta_description: $product->language()->meta_description}}">
@endsection

@section('wrapper')
    <section class="every_showcase product_title">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.catalog')
                    - {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}
                </div>
                <div class="title">
                    {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}
                </div>
            </div>
        </div>
    </section>

    <section class="product_title_section">
        <div class="flex">
            <div class="img">
                <img src="{{url(count($product->files)? $product->files[0]->path.'/'.$product->files[0]->title : '')}}"
                     alt="">
            </div>
            <div class="info">
                <div
                    class="title">{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}</div>
                {{--                <div class="title">{{number_format($product->price/100)}}</div>--}}
                <div class="title">{{$product->price}}</div>
                <table class="size_price_table">
                    {{--                    @dd($answersList)--}}
                    {{--                    @foreach($answersList as $ans)--}}

                    @foreach($product->features as $feature)
                        @php
                            $arr = $feature->answers()->get();

                            foreach($answersList as $ans){
                                foreach ($arr as $key => $answer){
                                    if ($answer->id==$ans){
                                        $arr[] = $answer;

                                        unset($arr[$key]);
                                    }
                                }
                            }
                        @endphp
                        {{--                        foreach($answersList as $ans){--}}
                        {{--                        foreach ($arr as $key => $answer){--}}
                        {{--                        $arr[$answer->id] = $arr[$key];--}}
                        {{--                        unset($arr[$key]);--}}
                        {{--                        }--}}
                        {{--                        }--}}

                        {{--                        foreach ($answersList as $key => $answer){--}}
                        {{--                                    $answersList[$answer] = $answersList[$key];--}}
                        {{--                                unset($answersList[$key]);--}}
                        {{--                                }--}}
                        {{--                                dd($arr);--}}
                        {{--                                dd(array_replace($answersList, $arr->toArray()));--}}

{{--                        @dd($arr)--}}
                        <tr>
                            <td>{{$feature->feature->language(app()->getLocale())? $feature->feature->language(app()->getLocale())->title: $feature->feature->language()->title}}</td>
                            {{--                                @php($arr=)--}}
                            @foreach($arr as $key => $answer)
{{--                                @if($answer->id == $ans)--}}
                                    <td>{{$answer->language(app()->getLocale())? $answer->language(app()->getLocale())->title: $answer->language()->title}}</td>
{{--                                @endif--}}
                            @endforeach
                        </tr>
                    @endforeach
                    {{--                    @endforeach--}}
                </table>
            <!-- @foreach($product->features as $feature)
                <p class="p"><b>
{{$feature->feature->language(app()->getLocale())? $feature->feature->language(app()->getLocale())->title: $feature->feature->language()->title}}

                    </b>
@foreach($feature->answers()->get() as $key => $answer)
                    @if($key > 0)
                        ,
@endif
                    {{$answer->language(app()->getLocale())? $answer->language(app()->getLocale())->title: $answer->language()->title}}
                @endforeach
                    </p>
                @endforeach -->
            </div>
        </div>
        <div class="description">
            <div class="title">@lang('client.description')</div>
            <p class="p">{!! $product->language(app()->getLocale())? $product->language(app()->getLocale())->description: $product->language()->description !!}</p>
        </div>
    </section>
@endsection
