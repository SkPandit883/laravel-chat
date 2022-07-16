@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12">
                <div class="agent-user-chat-container">
                    <div class="row flex">
                        <div class="col s12 m3 no-padding-col">
                            <div class="agent-list">
                                <div class="header">
                                    <h6>Quote Recieved From</h6>
                                </div>
                                <div class="search-agent"><input type="text" name="" id=""
                                        placeholder="Send Quote To Other Agent" class="browser-default"> <button><i
                                            class="fa fa-plus"></i></button></div>
                                <div class="agent-card">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/17.png"
                                            alt="Agent Name"> <span class="title">Macedon Travel</span> <span
                                            class="message">Hi This is your quote.</span></div> <span class="pricing"><i
                                            class="fa fa-tags"></i>Aud 1420</span>
                                </div>
                                <div class="agent-card">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/20.png"
                                            alt="Agent Name"> <span class="title">Ozii Travel Plan</span> <span
                                            class="message">This is a great quote.</span></div> <span class="pricing"><i
                                            class="fa fa-tags"></i>Aud 1780</span>
                                </div>
                                <div class="agent-card active">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/25.png"
                                            alt="Agent Name"> <span class="title">Beyond Vacations</span> <span
                                            class="message">Great</span></div> <span class="pricing"><i
                                            class="fa fa-tags"></i>Aud 150</span>
                                </div>
                                <div class="agent-card">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/24.png"
                                            alt="Agent Name"> <span class="title">France Tourism</span> <span
                                            class="message">Hi How can we help you with your tr</span></div> <span
                                        class="pricing"><i class="fa fa-tags"></i>Aud 1500</span>
                                </div> <br>
                                <div class="other-agents">
                                    <div class="header">
                                        <h6>Awaiting Quote</h6>
                                    </div>
                                    <div class="agent-card">
                                        <div class="agent-info"><img
                                                src="https://travelquoter.com/assets/img/agents/25.png"
                                                alt="Agent Name"> <span class="title">Asia Travels</span>
                                            <ul class="quote-status">
                                                <li>• Seen</li>
                                                <li>• Delivered</li>
                                            </ul>
                                        </div> <span class="timer"><i class="fa fa-clock"></i>19:10:03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 no-padding-col">
                            <div class="agent-quote-details">
                                <div class="header">
                                    <div class="quote-time-left"><label>Agent Should Reply In</label> <span>15 Hrs. 14
                                            Mins.</span></div>
                                    <div class="active-agent"><img
                                            src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                        <h6>Beyond Vacations</h6>
                                    </div> <button data-position="top" data-delay="50" data-tooltip="View Agent Profile"
                                        class="agent-profile tooltipped"><i class="fa fa-user"></i></button>
                                </div>
                                <div class="contents">
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <h5>Travel Quote Details</h5>
                                        </div>
                                        <div class="col s12 m6">
                                            <div class="add-options-container"><a data-beloworigin="true" href="#"
                                                    data-activates="dropdown1" class="dropdown-button"><button
                                                        class="add-travel-options tq-button-1"><i
                                                            class="fa fa-plus"></i>&nbsp; Add Options</button></a>
                                                <ul id="dropdown1"
                                                    class="tq-dropdown dropdown-theme-1 add-options-dropdown"><a
                                                        href="#">
                                                        <li><i class="tq-icon">g</i> <span>Add Flight</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">d</i> <span>Add Accommodation</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">i</i> <span>Add Car Hire</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">e</i> <span>Add Cruise</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">a</i> <span>Add Insurance</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">h</i> <span>Add Visa</span></li>
                                                    </a></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quote-table">
                                        <div class="quote-table-head">
                                            <h6 class="title">Flight</h6> <button class="i fa fa-edit"></button>
                                        </div>
                                        <table>
                                            <thead>
                                                <td>FROM</td>
                                                <td>TO</td>
                                                <td>DAYS</td>
                                                <td>DEPARTURE</td>
                                                <td>PASSENGER</td>
                                                <td>CABIN</td>
                                                <td>VISA</td>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sydney</td>
                                                    <td>Kathmandu</td>
                                                    <td>10 Days</td>
                                                    <td>20 Dec. 2020</td>
                                                    <td>Adult: 1, Child: 0, Infant: 1</td>
                                                    <td>Economy</td>
                                                    <td>No</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="quote-table">
                                        <div class="quote-table-head">
                                            <h6 class="title">Car Hire</h6> <button class="i fa fa-edit"></button>
                                        </div>
                                        <table>
                                            <thead>
                                                <td>PICKUP</td>
                                                <td>DROP OFF</td>
                                                <td>CAR TYPE</td>
                                                <td>PICKUP DATE</td>
                                                <td>DROPOFF DATE</td>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sydney</td>
                                                    <td>Kathmandu</td>
                                                    <td>Sedan</td>
                                                    <td>20 Dec. 2020</td>
                                                    <td>22 Dec. 2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="quote-actions right-align"><button class="tq-button-1">Resend Quote to
                                            Agent Name</button> &nbsp;
                                        <button class="tq-button-1">Resend Quote to All Agents</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3 no-padding-col">
                            <div class="agent-chat-section">
                                <div class="agent-intro">
                                    <div class="agent-intro-left"><img
                                            src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                        <div class="agent-name">
                                            <h6>
                                                @if (Auth::user()->id === 1)
                                                User2
                                                @else
                                                User1
                                                @endif
                                            </h6>
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="chat-bottom" id="message_container">
                                    @foreach ($messages as $message)
                                    <div class="messages @if($message->from_user ===Auth::user()->id)
                                            sent
                                        @else
                                        received
                                        @endif ">
                                        <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                        
                                        <span>{{$message->message}}</span><br>
                                        @if ($message->file)
                                            <br/>
                                            @if(isImage(asset("/uploaded/.$message->file")))
                                                <img class="message-img" src="{{asset("/uploaded/.$message->file")}}" style="border: none;height: 140px;width: 109px;border-radius: 0px;">
                                            @elseif($condition)
                                                <div class="bg-gray-200 px-3 py-1 rounded-md shadow-md">{{$message->file}}</div>
                                            @endif
                                        @endif

                                    </div>

                                    @endforeach


                                </div>
                                <div class="message-outer">
                                    <div class="bg-white p-3 rounded-md w-full mt-3 mb-1 hidden" id="file-container">
                                        <div class="flex items-start">
                                            <img style="height:50px;" class="rounded-lg"
                                                src="https://economictimes.indiatimes.com/thumb/msid-89465809,width-1254,height-836,resizemode-4,imgsize-28786/indian-hotels.jpg"
                                                alt="" id="image">
                                            <div class="bg-green-700 hidden text-white px-4 py-1 rounded-md shadow-md"
                                                id="other-file"></div>
                                            <button onclick="resetFile(this)"
                                                class="bg-white shadow-lg p-1 rounded-full relative mt-[-7px] ml-[-15px]">
                                                <img
                                                    src="https://img.icons8.com/external-basicons-line-edtgraphics/15/000000/external-cancel-ui-edtim-outline-edtim.png" />
                                            </button>

                                        </div>
                                    </div>

                                    <div class="message-container p-2">
                                        <button onclick="uploadFile()">
                                            <img
                                                src="https://img.icons8.com/fluency-systems-regular/25/000000/file.png" />
                                        </button>
                                        <input type="file" name="file" hidden id="file-uploader"
                                            onchange="setFile(event)">  
                                        <input type="text" name="message" id="message"
                                            placeholder="Type Your Message Here" class="browser-default w-3/4 mx-2">
                                        <input type="hidden" name="to_user" id="to_user"
                                            value="@if (Auth::user()->id === 1) 2 @else 1 @endif">
                                        <input type="hidden" name="from_user" value="{{ Auth::user()->id }}"
                                            id="from_user">
                                        <button class="bg-red-700  text-white" id="send-button"
                                            onclick="sendMessage()"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script></script>
@endsection