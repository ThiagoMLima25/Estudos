using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace MODEL_FORM.Models
{
    public static class Data
    {
        private static List<Client> ClientList = new List<Client>();

        //public static IEnumerable<Client> AllData
        //{
        //    get
        //    {
        //        return ClientList;
        //    }
        //}

        public static IEnumerable<Client> AllData()
        {
            return ClientList;
        }

        public static Client ClientData(int Id)
        {
            var Client = ClientList.Where(i => i.Id == Id).FirstOrDefault();
            return Client;
        }

        public static void AddClient(Client Item)
        {
            Item.Id = 0;
            if (ClientList.Count() != 0)
            {
                Item.Id = ClientList.Last<Client>().Id + 1;
            }

            ClientList.Add(Item);
        }

        public static void EditClient(Client Item)
        {
            ClientList.Where(i => i.Id == Item.Id).First().Name = Item.Name;
            ClientList.Where(i => i.Id == Item.Id).First().PhoneNumber = Item.PhoneNumber;
        }

        public static void DeleteClient(int Id)
        {
            var Item = ClientList.First<Client>(i => i.Id == Id);
            ClientList.Remove(Item);
        }
    }
}
