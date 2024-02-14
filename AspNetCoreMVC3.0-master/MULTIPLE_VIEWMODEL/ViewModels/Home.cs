using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace MULTIPLE_VIEWMODEL.ViewModels
{
    public class Home
    {
        public int Number { get; set; }
        public string Color { get; set; }
    }
    public class Human
    {
        public string Name { get; set; }
        public string NickName { get; set; }
    }

    public class ViewModelBag
    {
        public Home Home { get; set; }
        public Human Human { get; set; }
    }
}
