import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { SpecialtiesService } from 'src/app/services/specialties.service';

@Component({
  selector: 'app-specialties-form',
  templateUrl: './specialties-form.component.html',
  styleUrls: ['./specialties-form.component.scss']
})
export class SpecialtiesFormComponent implements OnInit {
  specialty : Object;
  constructor(private specialtiesService: SpecialtiesService,
              private route: Router,
              private routeParams: ActivatedRoute,
  ) {

  }

  onSubmit(formValues: Object){
    if(this.specialty.id > 0){
      this.specialtiesService.modSpecialty(this.specialty).subscribe(data => {
        this.route.navigate(['/specialties']);
      }, error => console.log(error));
    }else{
      this.specialtiesService.addSpecialty(formValues).subscribe(data => {
        this.route.navigate(['/specialties']);
      });
    }
  }
  ngOnInit(): void {
    this.specialtiesService.getSpecialties().subscribe(data => {
      this.specialty = data;
    })
    let vetId = Number.parseInt(this.routeParams.snapshot.paramMap.get('id'));
    if(vetId != -1){
      this.specialtiesService.getSpecialtyDetails(vetId).subscribe(data => {
        this.specialty = data;
      })
    }
  }
}
