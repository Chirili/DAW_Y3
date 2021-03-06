import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './components/home/home.component';
import { OwnersComponent } from './components/owners/owners.component';
import { HttpClientModule } from '@angular/common/http';
import { OwnerDetailComponent } from './components/owner-detail/owner-detail.component';
import { VetsComponent } from './components/vets/vets.component';
import { FormOwnerComponent } from './components/form-owner/form-owner.component';
import { VetDetailComponent } from './components/vet-detail/vet-detail.component';
import { FormvetComponent } from './components/formvet/formvet.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { PetTypesComponent } from './components/pet-types/pet-types.component';
import { PetTypesFormComponent } from './components/pet-types-form/pet-types-form.component';
import { SpecialtiesComponent } from './components/specialties/specialties.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    OwnersComponent,
    OwnerDetailComponent,
    VetsComponent,
    FormOwnerComponent,
    VetDetailComponent,
    FormvetComponent,
    PetTypesComponent,
    PetTypesFormComponent,
    SpecialtiesComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    NgbModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
