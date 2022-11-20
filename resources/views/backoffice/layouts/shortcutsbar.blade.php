<div id="backoffice-profilebar" class="py-2 m-0 bg-light border-bottom">

    <div class="container-fluid">

        @if (isset($buttons))

            @foreach ($buttons as $button)

                <x-bootstrap-button
                    :type="$button->type"
                    :style="$button->style"
                    :content="$button->content"
                    :size="$button->size"
                    :icon="$button->icon"
                ></x-bootstrap-button>

            @endforeach

        @endif

    </div>

</div>
