import { Component, OnInit } from '@angular/core';
import { VetService } from 'src/app/services/vet.service';
import {Router, ActivatedRoute} from '@angular/router';
@Component({
  selector: 'app-vet-detail',
  templateUrl: './vet-detail.component.html',
  styleUrls: ['./vet-detail.component.scss']
})
export class VetDetailComponent implements OnInit {
  public vet: Object;
  constructor(private vetService: VetService, private routeDetails: ActivatedRoute) { }

  ngOnInit(): void {
    this.vetService.getVetDetails(this.routeDetails.snapshot.paramMap.get("id")).subscribe(data => {
      console.log(data);
      
      this.vet = data;
    });
  }

}
