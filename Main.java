import java.util.ArrayList;
import java.util.List;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;


class Fournisseur {
    private int id;
    private String nom;
    private String adresse;
    private String email;

    public Fournisseur(int id, String nom, String adresse, String email) {
        this.id = id;
        this.nom = nom;
        this.adresse = adresse;
        this.email = email;
    }


    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @Override
    public String toString() {
        return "Fournisseur [id=" + id + ", nom=" + nom + ", adresse=" + adresse + ", email=" + email + "]";
    }
}

 class GestionFournisseurs {
    private List<Fournisseur> fournisseurs;

    public GestionFournisseurs() {
        fournisseurs = new ArrayList<>();
    }

    public void ajouterFournisseur(Fournisseur fournisseur) {
        fournisseurs.add(fournisseur);
    }

    public Fournisseur consulterFournisseur(int id) {
        for (Fournisseur fournisseur : fournisseurs) {
            if (fournisseur.getId() == id) {
                return fournisseur;
            }
        }
        return null;
    }

    public void supprimerFournisseur(int id) {
        fournisseurs.removeIf(fournisseur -> fournisseur.getId() == id);
    }

    public void modifierFournisseur(Fournisseur nouveauFournisseur) {
        for (Fournisseur fournisseur : fournisseurs) {
            if (fournisseur.getId() == nouveauFournisseur.getId()) {
                fournisseur.setNom(nouveauFournisseur.getNom());
                fournisseur.setAdresse(nouveauFournisseur.getAdresse());
                fournisseur.setEmail(nouveauFournisseur.getEmail());
                break;
            }
        }
    }

    public List<Fournisseur> dixFournisseurs() {
        int count = Math.min(fournisseurs.size(), 10);
        return fournisseurs.subList(0, count);
    }
public class DatabaseConnection {
    private static final String URL = "jdbc:mysql://localhost/gesfournisseur";
    private static final String USER = "root";
    private static final String PASSWORD = "";

    public static Connection getConnection() {
        Connection connection = null;
        try {
            connection = DriverManager.getConnection(URL, USER, PASSWORD);
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return connection;
    }
}

    public static void main(String[] args) {
        GestionFournisseurs gestionFournisseurs = new GestionFournisseurs();

        gestionFournisseurs.ajouterFournisseur(new Fournisseur(1, "MAMA", "kikala", "ddd@example.com"));
        gestionFournisseurs.ajouterFournisseur(new Fournisseur(2, "MAMA", "kikala", "ddd@example.com"));

        Fournisseur fournisseur = gestionFournisseurs.consulterFournisseur(1);
        if (fournisseur != null) {
            System.out.println("Fournisseur trouvé : " + fournisseur);
        } else {
            System.out.println("Fournisseur non trouvé.");
        }

        gestionFournisseurs.supprimerFournisseur(2);

        Fournisseur nouveauFournisseur = new Fournisseur(1, "johne", "johne", "ddd@example.com");
        gestionFournisseurs.modifierFournisseur(nouveauFournisseur);

        List<Fournisseur> premiersFournisseurs = gestionFournisseurs.dixFournisseurs();
        System.out.println("Les 10 premiers fournisseurs :");
        for (Fournisseur f : premiersFournisseurs) {
            System.out.println(f);
        }
         class GestionFournisseursDAO {
        public List<Fournisseur> getAllFournisseurs() {
        List<Fournisseur> fournisseurs = new ArrayList<>();
        String query = "SELECT id_fournisseur, nom_fournisseur, adress_fournisseur, email_fournisseur FROM fournisseur";
        
        try (Connection connection = DatabaseConnection.getConnection();
             PreparedStatement statement = connection.prepareStatement(query);
             ResultSet resultSet = statement.executeQuery()) {

            while (resultSet.next()) {
                int id = resultSet.getInt("id_fournisseur");
                String nom = resultSet.getString("nom_fournisseur");
                String adresse = resultSet.getString("adress_fournisseur");
                String email = resultSet.getString("email_fournisseur");
                fournisseurs.add(new Fournisseur(id, nom, adresse, email));
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }
        
        return fournisseurs;
    }
    
}

    }
}
