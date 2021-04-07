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


            @elseif($FrmCreateZone)
            @include('livewire.zones.create')
         @elseif($FrmEditZone)
            @include('livewire.zones.Edit')
         @elseif($FrmConsultZone)
            @include('livewire.zones.Read')
         @elseif($FrmImpPageZone)
            @include('livewire.zones.ImpPage')


            @elseif($FrmCreateMatMarque)
            @include('livewire.mat-marque.create')
         @elseif($FrmEditMatMarque)
            @include('livewire.mat-marque.Edit')
         @elseif($FrmConsultMatMarque)
            @include('livewire.mat-marque.Read')
         @elseif($FrmImpPageMatMarque)
            @include('livewire.mat-marque.ImpPage')

            @elseif($FrmCreate)
            @include('livewire.mat-type.create')
         @elseif($FrmEdit)
            @include('livewire.mat-type.Edit')
         @elseif($FrmConsult)
            @include('livewire.mat-type.Read')
         @elseif($FrmImpPage)
            @include('livewire.mat-type.ImpPage')

            @elseif($FrmCreateMaterielModele)
            @include('livewire.mat-modele.create')
         @elseif($FrmEditMaterielModele)
            @include('livewire.mat-modele.Edit')
         @elseif($FrmConsultMaterielModele)
            @include('livewire.mat-modele.Read')
         @elseif($FrmImpPageMaterielModele)
            @include('livewire.mat-modele.ImpPage')

            @elseif($FrmCreateMatCategorie)
            @include('livewire.mat-categorie.create')
         @elseif($FrmEditMatCategorie)
            @include('livewire.mat-categorie.Edit')
         @elseif($FrmConsultMatCategorie)
            @include('livewire.mat-categorie.Read')
         @elseif($FrmImpPageMatCategorie)
            @include('livewire.mat-categorie.ImpPage')

            @elseif($FrmCreateCarbCategorie)
            @include('livewire.carb-categorie.create')
         @elseif($FrmEditCarbCategorie)
            @include('livewire.carb-categorie.Edit')
         @elseif($FrmConsultCarbCategorie)
            @include('livewire.carb-categorie.Read')
         @elseif($FrmImpPageCarbCategorie)
            @include('livewire.carb-categorie.ImpPage')

            @elseif($FrmCreateCarbProduit)
            @include('livewire.carb-Produit.create')
         @elseif($FrmEditCarbProduit)
            @include('livewire.carb-Produit.Edit')
         @elseif($FrmConsultCarbProduit)
            @include('livewire.carb-Produit.Read')
         @elseif($FrmImpPageCarbProduit)
            @include('livewire.carb-Produit.ImpPage')
           
         
            @elseif($FrmCreateMaterielMatricule)
            @include('livewire.mat-matricule.create')
         @elseif($FrmEditMaterielMatricule)
            @include('livewire.mat-matricule.Edit')
         @elseif($FrmConsultMaterielMatricule)
            @include('livewire.mat-matricule.Read')
         @elseif($FrmImpPageMaterielMatricule)
            @include('livewire.mat-matricule.ImpPage')


            @elseif($FrmCreateConducteurCategorie)
            @include('livewire.conduct-categorie.create')
         @elseif($FrmEditConducteurCategorie)
            @include('livewire.conduct-categorie.Edit')
         @elseif($FrmConsultConducteurCategorie)
            @include('livewire.conduct-categorie.Read')
         @elseif($FrmImpPageConducteurCategorie)
            @include('livewire.conduct-categorie.ImpPage')
            

            @elseif($FrmCreateConducteur)
            @include('livewire.conducteur.create')
         @elseif($FrmEditConducteur)
            @include('livewire.conducteur.Edit')
         @elseif($FrmConsultConducteur)
            @include('livewire.conducteur.Read')
         @elseif($FrmImpPageConducteur)
            @include('livewire.conducteur.ImpPage')
           
            
            
            
             
        @endif

   