import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Vet } from 'src/app/models/vet';
import { SpecialtiesService } from 'src/app/services/specialties.service';
import { VetService } from 'src/app/services/vet.service';

@Component({
  selector: 'app-formvet',
  templateUrl: './formvet.component.html',
  styleUrls: ['./formvet.component.scss']
})
export class FormvetComponent implements OnInit {
  vet : Vet;
  specialties: Object[];
  constructor(private vetService: VetService,
              private route: Router,
              private routeParams: ActivatedRoute,
              private specialtiesService: SpecialtiesService
  ) {

  }

  onSubmit(formValues: Vet){
    if(this.vet.id > 0){
      this.vetService.modVet(this.vet).subscribe(data => {
        console.log("funciona");
        this.route.navigate(['/vets']);
      }, error => console.log(error));
    }else{
      formValues.specialties = formValues.specialties.reduce((acc,next) => {
        return acc = [...acc,{id: next}];
      },[]);
      this.vetService.addVet(formValues).subscribe(data => {
        this.route.navigate(['/vets']);
      });
    }
  }
  ngOnInit(): void {
    this.specialtiesService.getSpecialties().subscribe(data => {
      this.specialties = data;
    })
    let vetId = Number.parseInt(this.routeParams.snapshot.paramMap.get('id'));
    if(vetId != -1){
      this.vetService.getVetDetails(vetId).subscribe(data => {
        this.vet = data;
      })
    }else{
      this.vet = <Vet>{
        specialties: [],
      };
    }
  }

}
