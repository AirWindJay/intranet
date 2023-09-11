@extends('layouts.app')

@section('content')
<script>
    function reload()
    {
        location.reload();
    }
</script>
<a href="/home"><button class="btn btn-default">Home</button></a>
<h1 align="center" style="font-family:georgia"><b>Message Programmer<b></h1>
<div class="container">
    <div>
        <div class="col-md-10">
            <button align="center" class="btn btn-primary" onclick="reload()">REFRESH</button>

            <form method="POST" action="/messageme/save">
                @csrf

                <div class="form-group row">
                    <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                    <div class="col-md-6">
                        <textarea id="message" style="height: 250px" type="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}" required>
                        </textarea>
                        @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Send') }}
                        </button>
                    </div>
                </div>
            </form>
            <br>

            <table align="center" style="width: 80%; border: 5px solid white;">
                @foreach ($sug as $item)
                    @if ($item->to_me == '1')
                        <tr style="border: 5px solid white">
                            <td style="width: 50%; background-color: darkcyan; padding: 10px 10px 10px 10px; border: 5px solid white; border-radius: 5px;">
                                FROM YOU: {{$item->msg}}
                            </td>
                            <td style="width: 50%; border: 5px solid white">
                                 
                            </td>
                        </tr>
                    @elseif($item->to_me == '0')
                        <tr style="border: 5px solid white">
                            <td style="width: 50; border: 5px solid white">
                                 
                            </td>
                            <td style="width: 50; background-color: orchid; padding: 10px 10px 10px 10px; border: 5px solid white; border-radius: 5px;">
                                FROM PROGRAMMER: {{$item->msg}}
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
