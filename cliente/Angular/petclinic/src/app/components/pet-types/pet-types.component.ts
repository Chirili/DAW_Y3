import { Component, OnInit } from '@angular/core';
import { PetType } from 'src/app/models/pet-type';
import { PetTypeService } from 'src/app/services/pet-type.service';

@Component({
  selector: 'app-pet-types',
  templateUrl: './pet-types.component.html',
  styleUrls: ['./pet-types.component.scss']
})

export class PetTypesComponent implements OnInit {
  pettypes: PetType[];
  petTypeCopy: PetType;
  isEditing: boolean;
  constructor(private petTypeService: PetTypeService) { }

  ngOnInit(): void {
    this.isEditing = true;
    this.petTypeCopy = {
      id: 0,
      name: ""
    }
    this.pettypes = [];
    this.petTypeService.getPetTypes().subscribe(data => {
      this.pettypes = data;
    })
  }
  editPetType(petType){
    this.isEditing = !this.isEditing;
    this.petTypeCopy = petType;
    if(this.isEditing) this.petTypeCopy = {
      id: 0,
      name: "",
    }
  }
  savePetType(){
    this.isEditing = !this.isEditing;
    
  }
  removePetType(id){
    if(confirm(`¿Estás seguro que deseas eliminar a ${id}?`))
    this.petTypeService.removePetType(id).subscribe(data => {
      this.pettypes.splice(this.pettypes.findIndex(petType => petType.id == id),1)
    })
  }
}
