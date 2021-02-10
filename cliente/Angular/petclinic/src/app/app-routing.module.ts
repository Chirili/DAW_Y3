import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { OwnerDetailComponent } from './components/owner-detail/owner-detail.component';
import { OwnersComponent } from './components/owners/owners.component';
import { VetsComponent } from './components/vets/vets.component';

const routes: Routes = [
  {path: '', component: HomeComponent},
  {path: 'owners',component: OwnersComponent},
  {path: 'owners/:id', component: OwnerDetailComponent},
  {path: 'vets', component: VetsComponent},
  {path: 'vets/:id', component: OwnerDetailComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
