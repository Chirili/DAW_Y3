import { Component, OnInit } from '@angular/core';
import { SpecialtiesService } from 'src/app/services/specialties.service';

@Component({
  selector: 'app-specialties',
  templateUrl: './specialties.component.html',
  styleUrls: ['./specialties.component.scss']
})
export class SpecialtiesComponent implements OnInit {
  specialties: Object[];
  constructor(private specialtiesService: SpecialtiesService) { }

  ngOnInit(): void {
    this.specialtiesService.getSpecialties().subscribe(data => {
      this.specialties = data;
    })
  }
  removeSpecialty(id){
    if(confirm(`¿Estás seguro que deseas borrar a ${id}?`)){
      this.specialtiesService.removeSpecialty(id).subscribe(data => {
        console.log(data);
        this.specialties.splice(this.specialties.findIndex(specialty => specialty.id == id),1);
      });
    }
  }
}
