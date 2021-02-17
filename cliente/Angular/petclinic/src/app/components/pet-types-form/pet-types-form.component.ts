import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
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
  public petTypeForm: FormGroup;
  @Output() onNewPetType = new EventEmitter();

  constructor(private route: Router, private petTypeService: PetTypeService, private formBuilder: FormBuilder) {
      this.petTypeForm = this.formBuilder.group({
        name: ['',[Validators.required]]
      })
   }
  onSubmit(formValues: PetType){
      this.petTypeService.addPetType(formValues).subscribe(data=>{
        this.onNewPetType.emit(data)
      }, error => console.log(error));
  }
  ngOnInit(): void {
    this.petType = <PetType>{};
  }

}
