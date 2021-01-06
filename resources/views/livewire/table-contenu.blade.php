        @if($FrmCreateEntreprise)
             @include('livewire.FrmCreateEntreprise')
        @elseif($FrmEditEntreprise)
            @include('livewire.FrmEditEntreprise')
        @elseif($FrmConsultEntreprise)
            @include('livewire.FrmConsultEntreprise')

            
        @endif

   