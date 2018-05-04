@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'Donations'))


<div id="tabs-01" class="tabs bosder">

    <h3>Your Donations</h3>
    <p>Here are listed all your donations - both received and sent ones.</p>
    <ul class="tabs-navigation">
    <li class="active"><a href="#incoming-donations"><i class="fa fa-home"></i>Received</a> </li>
    <li><a href="#sent-donations"><i class="fa fa-home"></i>Sent</a> </li>
    </ul>
    <div class="tabs-content">
        <div class="tab-pane active" id="incoming-donations">
        <div class="table-responsive">
                @if($received_donations->first())
                <table class="table table-hover">
                <thead>
                <tr>
                <th>ID</th>
                <th>Sender</th>
                <th>Amount</th>
                <th>Message</th>
                <th>Date</th>
                <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($received_donations as $rd)
                        <tr>
                        <td>{{ $rd->id }}</td>
                        <td>{!! getUserNameLink($rd->user_id) !!}</td>
                        <td>{{ $rd->amount }} EUR</td>
                        <td>{{ $rd->message }}</td>
                        <td>{{ $rd->created_at->format('d/m/Y') }}</td>
                        <td><a href="{{ route('donations.show', $rd->id) }}" class="btn btn-xs">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                @else
                    <p>You have not received any donations yet. The active members tend to be ones to benefit. 🙂</p>
                @endif

        </div>
        </div>
    <div class="tab-pane" id="sent-donations">
            <div class="table-responsive">
                    @if($sent_donations->first())
                    <table class="table table-hover">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($sent_donations as $sd)
                            <tr>
                            <td>{{ $sd->id }}</td>
                            <td>{!! getUserNameLink($sd->receiver_id) !!}</td>
                            <td>{{ $sd->amount }} EUR</td>
                            <td>{{ $sd->message }}</td>
                            <td>{{ $sd->created_at->format('d/m/Y') }}</td>
                            <td><a href="{{ route('donations.show', $sd->id) }}" class="btn btn-xs">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    @else
                    <p>You have not sent any donations yet.</p>
                    @endif
            </div>
    </div>
    </div>
</div>

    @endsection