<div class="border mt-2 d-flex p-0" style="align-items: baseline; justify-content: space-evenly;">
    {{-- number of likes --}}
    <span class="">
        <button class="btn border-end border-2 rounded-0" style="--bs-border-opacity: .5; border-color : #f0f8ff00"
            wire:click="like('{{ $reactions['post_id'] }}')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                <path
                    d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
            </svg>
        </button>
    </span>
    <span class="me-1">
        {{ $reactions['likes'] }}
    </span>

    {{-- number of dislikes --}}
    <span class="">
        <button class="btn border-end border-start border-2 rounded-0"
            style="--bs-border-opacity: .5; border-color : #f0f8ff00"
            wire:click="dislike('{{ $reactions['post_id'] }}')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                <path
                    d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
            </svg>
        </button>
    </span>
    <span class="me-1">
        {{ $reactions['dislikes'] }}
    </span>

    {{-- number of comments --}}
    <span class="">
        <button class="btn border-end border-start border-2 rounded-0"
            style="--bs-border-opacity: .5; border-color : #f0f8ff00" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasBottom-{{ $reactions['post_id'] }}" aria-controls="offcanvasWithBothOptions">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                <path
                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
            </svg>
        </button>
    </span>
    <span class="me-1">
        945883
    </span>

    <div class="offcanvas offcanvas-bottom rounded-3" tabindex="-1" id="offcanvasBottom-{{ $reactions['post_id']}}"
        aria-labelledby="offcanvasWithBothOptionsLabel" style="right: 18%;left: 18%;bottom: 20%;height: 70%;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Comment
                section</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        {{-- comments --}}
        <div class="offcanvas-body small">


            @livewire('comments', ['post_id' => $reactions['post_id']])
        </div>
    </div>

    {{-- number of share --}}
    <span class="">
        <button class="btn border-end border-start border-2 rounded-0"
            style="--bs-border-opacity: .5; border-color : #f0f8ff00">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                <path
                    d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
            </svg>
        </button>
    </span>
    <span class="me-1">
        945883
    </span>

</div>
