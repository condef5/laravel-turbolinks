<div class='handy-notify'>
    <span></span>
</div>

@if ($flash = session('message'))
    <script>
        Notify({
            value: '{{$flash}}', 
        })
    </script>
@endif