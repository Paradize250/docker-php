# Documentation git

- [Manual](https://git-scm.com/doc)
- [Livre Pro-Git](https://git-scm.com/book)

# Démarrage

Un dépôt **git** doit contenir 3 fichiers :

- un fichier **readme.md** qui introduit et explique votre projet :
    - [https://www.makeareadme.com/](https://www.makeareadme.com/)
    - [https://readme.so/fr](https://readme.so/fr)
    - [https://github.com/matiassingers/awesome-readme](https://github.com/matiassingers/awesome-readme)

- un fichier **.gitignore** qui permet de spécifier les fichiers,dossiers à ne pas suivre
    - [https://gitignore.io](https://gitignore.io)
    - [https://github.com/github/gitignore](https://github.com/github/gitignore)

- fichier **LICENCE.md** qui permet d'avoir un contrat avec les utilisateurs de votre projet
   - [Licence logiciel](https://fr.wikipedia.org/wiki/Licence_de_logiciel)
   - [Licence juridique](https://fr.wikipedia.org/wiki/Licence_(juridique))
   - [Pourquoi vous devriez vous intéresser aux licences de vos logiciels ?](https://fr.linkedin.com/pulse/pourquoi-vous-devriez-int%C3%A9resser-aux-licences-de-vos-logiciels-madet?trk=pulse-article_more-articles_related-content-card)
   - [Licence Creative Commons](https://fr.wikipedia.org/wiki/Licence_Creative_Commons)

## Créer un nouveau dépôt en ligne de commande

```
touch README.md LICENCE.md .gitignore
git init
git add *
git commit -m "Debut du prjet initialisation"
git branch -M main (renommer branche principale si besoin)
git remote add origin https://github.com/user/nom-depot.git
git push -u origin main
```

## Envoyer(push) un dépôt existant en ligne de commande

```
git init
git remote add origin https://github.com/user/nom-depot.git
git branch -M main (renommer branche principale si besoin)
git push -u origin main
```

## Travail avec git au quotidien

- `git pull` Importer le travail du dépôt distant
- `git status` Vérifier l'état de votre dépôt
- `git add fichier(s)` ou `git add *` Ajouter les fichiers modifiés pour être prêt à être suivis
- `git commit` ou `git commit -m "Sujet du commit"` Enregistrer vos modifications 
- `git push` Envoyer votre travail sur le dépôt distant

## Méthode de travail avec git

- [Comparing Git Workflows: What You Should Know ](https://www.atlassian.com/git/tutorials/comparing-workflows)
- [Workflow Gitflow](https://www.atlassian.com/fr/git/tutorials/comparing-workflows/gitflow-workflow)
- [Développement basé sur le tronc ](https://www.atlassian.com/fr/continuous-delivery/continuous-integration/trunk-based-development)
- [About collaborative development models](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/getting-started/about-collaborative-development-models)

## Articles relatifs à git

- [The Best Git Tutorials](https://www.freecodecamp.org/news/best-git-tutorial/)
- [Git Best Practices – How to Write Meaningful Commits, Effective Pull Requests, and Code Reviews](https://www.freecodecamp.org/news/git-best-practices-commits-and-code-reviews/)
- [Git Best Practices – A Guide to Version Control for Beginners](https://www.freecodecamp.org/news/how-to-use-git-best-practices-for-beginners/)
