<div>
    <div class="container bootstrap snippets bootdey mgg">

        <!--=========================================================-->
        <!-- selected chat -->
        <div class="bg-white ">
            <div class="p-1 chat-card">
                <ul class="chat">
                    {{-- messages's Sender --}}
                    @if (!is_null($thread))

                        @foreach ($thread->messages as $message)
                            @if ($message->user_id == $user->id)
                                <li class="left clearfix bg-secondary p-2 w-100 bg-5bff0045">
                                    <div>

                                        <span class="chat-img pull-left">
                                            <img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
                                        </span>

                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                {{-- name of the sender --}}
                                                <strong class="primary-font h5">{{ $user->full_name }}</strong>
                                            </div>
                                            {{-- the message body --}}
                                            <p class="word-wrap text-break" class="h6">
                                                {{ $message->body }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        {{-- messgae sent time --}}
                                        <small class="pull-right text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                            </svg>
                                            {{-- here is the time --}}
                                            {{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}
                                        </small>
                                    </div>
                                </li>
                            @else
                                <li class="right clearfix p-2 bg-003cff59">
                                    <div>
                                        <span class="chat-img pull-right">
                                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                {{-- Your name --}}
                                                <strong class="primary-font h5">{{ Auth::user()->full_name }}</strong>
                                            </div>
                                            {{-- the message body --}}
                                            <p class="word-wrap text-break" class="h6">
                                                {{ $message->body }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        {{-- messgae sent time --}}
                                        <small class=" text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                            </svg>
                                            {{-- here is the time --}}
                                            {{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}
                                        </small>
                                    </div>
                                </li>
                            @endif

                            {{-- message's recever (you always) --}}
                        @endforeach
                    @endif


                </ul>
            </div>
            <div class="bg-white p-3">
                <div>
                    <textarea id="input" wire:loading.remove name="body" wire:model.defer="messageBody"
                        class="form-control border no-shadow no-rounded h-200"
                        placeholder="Type your message here"></textarea>
                </div>
                <div class="input-group-btn text-center my-3" wire:loading.remove>
                    <button id="button" class="btn btn-info no-rounded" wire:click="send('{{ $user->id }}')">Send
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                        </svg>
                    </button>
                </div>
                <div wire:loading.delay.shortest>
                    <h6 class="load">Sending message....</h6>
                </div>
            </div>
        </div>
    </div>
</div>
