        @if($FrmCreateEntreprise)
             @include('livewire.FrmCreateEntreprise')
        @elseif($FrmEditEntreprise)
            @include('livewire.FrmEditEntreprise')
        @elseif($FrmConsultEntreprise)
            @include('livewire.FrmConsultEntreprise')
        @elseif($FrmImpPageEntreprise)
            @include('livewire.FrmImpPageEntreprise')

            
        @elseif($FrmCreateSite)
            @include('livewire.site.FrmCreatesite')
         @elseif($FrmEditSite)
            @include('livewire.site.FrmEditSite')
        @elseif($FrmConsultSite)
            @include('livewire.site.FrmConsultSite')
        @elseif($FrmImpPageSite)
            @include('livewire.site.FrmImpPageSite')

        
        @elseif($FrmCreateDirection)
            @include('livewire.direction.FrmCreateDirection')
         @elseif($FrmEditDirection)
            @include('livewire.Direction.FrmEditDirection')
        @elseif($FrmConsultDirection)
            @include('livewire.Direction.FrmConsultDirection')
        @elseif($FrmImpPageDirection)
            @include('livewire.Direction.FrmImpPageDirection')

        
            @elseif($FrmCreateService)
            @include('livewire.services.FrmCreateService')
         @elseif($FrmEditService)
            @include('livewire.services.FrmEditService')
        @elseif($FrmConsultService)
            @include('livewire.services.FrmConsultService')
        @elseif($FrmImpPageService)
            @include('livewire.services.FrmImpPageService')


        @elseif($FrmCreatePbascule)
            @include('livewire.Pbascules.FrmCreatePbascule')
         @elseif($FrmEditPbascule)
            @include('livewire.Pbascules.FrmEditPbascule')
        @elseif($FrmConsultPbascule)
            @include('livewire.Pbascules.FrmConsultPbascule')
        @elseif($FrmImpPagePbascule)
            @include('livewire.Pbascules.FrmImpPagePbascule')


         @elseif($FrmCreateGencadrement)
            @include('livewire.gencadrements.create')
         @elseif($FrmEditGencadrement)
            @include('livewire.gencadrements.Edit')
         @elseif($FrmConsultGencadrement)
            @include('livewire.gencadrements.Read')
         @elseif($FrmImpPageGencadrement)
            @include('livewire.gencadrements.ImpPage')

        @elseif($FrmCreatePlantation)
            @include('livewire.plantations.create')
         @elseif($FrmEditPlantation)
            @include('livewire.plantations.Edit')
         @elseif($FrmConsultPlantation)
            @include('livewire.plantations.Read')
         @elseif($FrmImpPagePlantation)
            @include('livewire.plantations.ImpPage')
            
            
            
             
        @endif

   