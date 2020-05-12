import { Component } from '@angular/core';
import { faChevronDown } from '@fortawesome/free-solid-svg-icons';
import { faChevronUp } from '@fortawesome/free-solid-svg-icons';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'robmercier';
  isHiddenExpertise = false;
  faChevronDefault = faChevronDown;
  faChevronDown = faChevronDown;
  faChevronUp = faChevronUp;
  toggleExpertise(): boolean {
    return this.isHiddenExpertise = !this.isHiddenExpertise;
  }
  onToggleExpertise(e) {
    this.toggleExpertise() ? this.faChevronDefault = this.faChevronUp : this.faChevronDefault = this.faChevronDown;
  }
  moreExperience = false;
  showMoreExperience(e) {
    return this.moreExperience = !this.moreExperience;
  }
}
