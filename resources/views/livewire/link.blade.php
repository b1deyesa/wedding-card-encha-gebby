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
            var message = "Kepada Yth. \nBapak/Ibu/Saudara/i\n\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami : \n🤵🏻 👰🏻‍♀ Marenza Dan Gelian \nUntuk informasi detail mengenai acara, silahkan kunjungi : \n\n" + document.getElementById("myInput").value + "\n\nMerupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\nAtas kehadiran dan doa restunya kami ucapkan terima kasih.\n\nHormat kami,\nMarenza Dan Gelian";
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