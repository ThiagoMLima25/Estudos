using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;
using VALIDATIONS.Validations;

namespace VALIDATIONS.Models
{
    public class People
    {
        public int PeopleId { get; set; }

        [Required(ErrorMessage = "Required Field.")]
        [StringLength(20)]
        //[Remote("CheckIfUserExistsAsync", "People", AdditionalFields = "PeopleId")]
        [People]
        public string Name { get; set; }

        [Required(ErrorMessage = "Required Field.")]
        [DataType(DataType.Date)]
        public DateTime Birthday { get; set; }

        [Required(ErrorMessage = "Required Field.")]
        [DataType(DataType.EmailAddress)]
        [StringLength(50)]
        public string Email { get; set; }

        [Required(ErrorMessage = "Required Field.")]
        [DataType(DataType.EmailAddress)]
        [StringLength(50)]
        [Compare("Email")]
        public string Confirm { get; set; }
    }
}
