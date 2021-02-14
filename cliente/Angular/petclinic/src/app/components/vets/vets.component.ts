import { Component, OnInit } from '@angular/core';
import { Vet } from 'src/app/models/vet';
import { VetService } from 'src/app/services/vet.service';

@Component({
  selector: 'app-vets',
  templateUrl: './vets.component.html',
  styleUrls: ['./vets.component.scss']
})
export class VetsComponent implements OnInit {

  public vets : Vet[];
  constructor(private vetService: VetService) {
  }

  ngOnInit(): void {
    this.vetService.getVets().subscribe(data => {
      this.vets = data;
    })
  }
  removeVet(id){
    if(confirm(`¿Estás seguro que deseas eliminar a ${id}?`)){
      this.vetService.removeVet(id).subscribe(data => {
        this.vets.splice(this.vets.findIndex(vet => vet.id == id),1)
      })
    }
  }
}
