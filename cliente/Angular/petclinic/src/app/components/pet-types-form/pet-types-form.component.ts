import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { PetType } from 'src/app/models/pet-type';
import { PetTypeService } from 'src/app/services/pet-type.service';

@Component({
  selector: 'app-pet-types-form',
  templateUrl: './pet-types-form.component.html',
  styleUrls: ['./pet-types-form.component.scss']
})
export class PetTypesFormComponent implements OnInit {
  public petType: PetType;
  constructor(private route: Router, private petTypeService: PetTypeService) {
      
   }
  onSubmit(formValues: PetType){
      this.petTypeService.addPetType(formValues).subscribe(data=>{
        this.route.navigate(['/pet-types']);
      }, error => console.log(error));
  }
  ngOnInit(): void {
      this.petType = <PetType>{};
  }

}
