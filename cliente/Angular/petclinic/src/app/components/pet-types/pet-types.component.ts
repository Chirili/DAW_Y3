import { Component, OnInit } from '@angular/core';
import { PetTypeService } from 'src/app/services/pet-type.service';

@Component({
  selector: 'app-pet-types',
  templateUrl: './pet-types.component.html',
  styleUrls: ['./pet-types.component.scss']
})

export class PetTypesComponent implements OnInit {
  pettypes: Object[];
  constructor(private petTypeService: PetTypeService) { }

  ngOnInit(): void {
    this.pettypes = [];
    this.petTypeService.getPetTypes().subscribe(data => {
      console.log(data);
      this.pettypes = data;
    })
  }
  removePetType(id){
    if(confirm(`¿Estás seguro que deseas eliminar a ${id}?`))
    this.petTypeService.removePetType(id).subscribe(data => {
      this.pettypes.splice(this.pettypes.findIndex(petType => petType.id == id),1)
    })
  }
}
