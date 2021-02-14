import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { PetTypeService } from 'src/app/services/pet-type.service';

@Component({
  selector: 'app-pet-types-form',
  templateUrl: './pet-types-form.component.html',
  styleUrls: ['./pet-types-form.component.scss']
})
export class PetTypesFormComponent implements OnInit {
  public petType: Object;
  constructor(private route: Router, private petTypeService: PetTypeService) {
      
   }
  onSubmit(formValues: Object){
      this.petTypeService.addPetType(formValues).subscribe(data=>{
        this.route.navigate(['/pet-types']);
      }, error => console.log(error));
  }
  ngOnInit(): void {
      this.petType = <Object>{
        pets: [],
      }
  }

}
