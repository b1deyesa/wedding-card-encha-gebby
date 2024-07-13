<div class="form">
    <style>
        #myInput {
            position: absolute;
            left: -9999px;
        }
    </style>
    <span class="input">
        <input type="text" wire:model.live="name" placeholder="Nama Tamu">
        <button @if($disabled) disabled @endif wire:click="clear" class="clear">Clear</button>
        <input type="text" id="myInput" value="{{ $link }}">
    </span>
    <div class="action">
        <button @if($disabled) disabled @endif onclick="copyText()"><i class="fa-solid fa-link"></i>Copy Link</button>
        <button @if($disabled) disabled @endif onclick="shareToWhatsApp()"><i class="fa-brands fa-whatsapp"></i>Share WA</button>
    </div>
    <script>
        function shareToWhatsApp() {
            var message = document.getElementById("myInput").value;
            var phoneNumber = 'number';
            var url = 'https://wa.me/'+ '?text=' + encodeURIComponent(message);
            window.open(url, '_blank');
        }
    </script>
    <script>
        function copyText() {
            var input = document.getElementById("myInput");
            input.select();
            input.setSelectionRange(0, 99999);
            document.execCommand("copy");
            alert("Link undangan berhasil di-copy");
        }
    </script>
</div>