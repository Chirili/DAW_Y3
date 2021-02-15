import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FormOwnerComponent } from './components/form-owner/form-owner.component';
import { FormvetComponent } from './components/formvet/formvet.component';
import { HomeComponent } from './components/home/home.component';
import { OwnerDetailComponent } from './components/owner-detail/owner-detail.component';
import { OwnersComponent } from './components/owners/owners.component';
import { VetDetailComponent } from './components/vet-detail/vet-detail.component';
import { VetsComponent } from './components/vets/vets.component';
import {PetTypesComponent} from './components/pet-types/pet-types.component';
import { PetTypesFormComponent } from './components/pet-types-form/pet-types-form.component';
import { SpecialtiesComponent } from './components/specialties/specialties.component';
const routes: Routes = [
  {path: '', component: HomeComponent},
  {path: 'owners',component: OwnersComponent},
  {path: 'owners/:id', component: OwnerDetailComponent},
  {path: 'owners/add/:id', component: FormOwnerComponent},
  {path: 'vets', component: VetsComponent},
  {path: 'vets/:id', component: VetDetailComponent},
  {path: 'vets/add/:id', component: FormvetComponent},
  {path: 'pet-types', component: PetTypesComponent} ,
  {path: 'pet-types/add/:id',component: PetTypesFormComponent},
  {path: 'specialties',component: SpecialtiesComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
